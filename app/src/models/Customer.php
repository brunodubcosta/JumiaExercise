<?

namespace models;

use classes\entities\CustomerEntity;
use classes\helpers\types\FilterType as Filter;

class Customer extends Model
{
    /**
     * @param array $filters
     *
     * @return array
     */
    public function getBy(array $filters): array
    {
        $filtersAdded = 0; //user to count how many filters already have been added
        $sql = "SELECT * FROM " . CustomerEntity::getTableName();

        foreach ($filters as $key => $value) {
            switch ($key) {
                case Filter::BY_COUNTRY_KEY:
                    if ($value != Filter::BY_COUNTRY_DEFAULT && $filtersAdded == 0) {
                        $sql .= " WHERE ";
                        $sql .= " " . CustomerEntity::COLUMN_PHONE . " like '%(" . $value . ")%'";
                        $filtersAdded++;
                    }
                    break;
                case Filter::BY_PAGE_KEY:
                    //this way pagination would't work as expected when filtering by state 
                    /*$num = intval($value) == 0 ? intval($value) + 1 : intval($value);
                    $endValue = $num * 10;
                    $startValue = $endValue - 10;
                    $sql .= ' LIMIT ' . $startValue . ',' . $endValue . ' ';*/
                    break;
            }
        }
        $data = $this->db->executeObject($sql); //array with data from DB
        return $data;
    }
}

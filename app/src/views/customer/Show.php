<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Jumia - Phone Numbers Exercise</title>
    <link href="../_css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <h1>Phone numbers</h1>
                    <br>
                    <form method="post" id="NumbersForm">
                        <div class="row">
                            <div class="col-2">
                                <select class="form-control" name="filterByCountry" onchange="this.form.submit()">

                                    <?php
                                    if (isset($_POST['filterByCountry'])) {
                                        echo " <option  disabled>Select country</option>";
                                    } else {
                                        echo " <option selected disabled>Select country</option>";
                                    }

                                    foreach ($countriesSelectList as $key => $value) {
                                        if (isset($_POST['filterByCountry']) && $_POST['filterByCountry'] == $key) {

                                            echo '<option selected value="' . $key . '">' . $value . '</option>';
                                        } else {
                                            echo '<option value="' . $key . '">' . $value . '</option>';
                                        }
                                    } ?>

                                </select>
                            </div>
                            <div class="col-3">
                                <select class="form-control" name="filterByState" onchange="this.form.submit()">

                                    <?php
                                    if (isset($_POST['filterByState']))
                                        echo '<option disabled="disabled">Phone state</option>';
                                    else
                                        echo '<option selected="selected" disabled>Phone state</option>';

                                    foreach ($stateSelectList as $key => $value) {

                                        if (isset($_POST['filterByState']) && $_POST['filterByState'] == $key)
                                            echo '<option selected="selected" value="' . $key . '">' . $value . '</option>';
                                        else
                                            echo '<option value="' . $key . '">' . $value . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <table class="table table-striped mt-5">
                            <thead>
                                <tr>
                                    <td>Country</td>
                                    <td>State</td>
                                    <td>Country Code</td>
                                    <td>Phone Num.</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = $paginate->getStartValue(); $i < $paginate->getEndValue(); $i++) {
                                    if (isset($customersList[$i])) {
                                        $state = $customersList[$i]->isPhoneValid() ? 'Ok' : 'NOk';

                                        echo '<tr>';
                                        echo '<td>' . $customersList[$i]->getCountryName() . '</td>';
                                        echo '<td>' . $state . '</td>';
                                        echo '<td>' . $customersList[$i]->getCountryCode() . '</td>';
                                        echo '<td>' . $customersList[$i]->getPhone() . '</td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <hr />
                        <div style="text-align:right;">
                            <span> <?php echo $countCustomers; ?> Items </span>
                        </div>
                        <div style="text-align:center;">
                            <input type="text" id="filterByPage" name="filterByPage" hidden="hidden" />
                            <?php
                            for ($i = $paginate->getPaginationStart(); $i <= $paginate->getPaginationEnd(); $i++) {
                                echo '<input type="button" name="filterByPage" class="" value="' . $i . '" onclick="pageButtonClick(' . $i . ');"/>';
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    function pageButtonClick(page) {
        var pageTextBox = document.getElementById("filterByPage");
        pageTextBox.value = page;
        var form = document.getElementById("NumbersForm");
        form.submit();
    }
</script>
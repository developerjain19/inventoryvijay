<?php include('includes/header.php'); ?>
<style>
    .element {
        width: 100%;
    }
</style>
<style type="text/css">
    @media print {
        table {
            border: 1px solid grey;
        }
    }

    @media screen,
    print {
        table {
            border: 1px solid grey;
        }
    }
</style>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12 " id="GFG">
                        <div class="portlet">
                            <div class="portlet-header portlet-header-bordered">
                                <h3 class="portlet-title"> <?= $title ?></h3>
                                <input type="button" value="Print" onclick="printDiv()">
                            </div>

                            <div class="portlet-body">
                                <div class="row">
                                    <table class="table">
                                        <tr>
                                            <td style="width:30.33%;"><b>Date -</b> <?= $billing[0]['date'] ?> <br><b> Invoice no.</b> - <?= $billing[0]['jid'] ?></td>
                                            <td style="width:30.33%;">
                                            </td>
                                            <td style="width:30.33%;">
                                                <br><b> Name</b> - <?= $billing[0]['driver_nm'] ?>
                                                <br><b> Contact no.</b> - <?= $billing[0]['driver_no'] ?>
                                            </td>


                                        </tr>
                                    </table>
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <td style="width:5%;">S.no. </td>
                                                <td style="width:65%;">Product </td>
                                                <td style="width:10%;">Price </td>
                                                <td style="width:10%;">Quantity </td>
                                                <td style="width:10%;">Total</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $jpro = getRowById('webangel_billing_product', 'jid', $billing[0]['jid']);
                                            foreach ($jpro as $pro) {
                                                $product =   getRowById('webangel_product', 'product_id', $pro['product']);


                                            ?>
                                                <tr>
                                                    <td><?= $i ?> </td>
                                                    <td><?= $product[0]['product_name'] ?></td>
                                                    <td>Rs. <?= $pro['price'] ?> /-</td>
                                                    <td><?= $pro['quantity'] ?> </td>
                                                    <td>Rs. <?= $pro['total'] ?> /-</td>
                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                            ?>
                                            <tr>
                                                <td>Total </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td>Rs. <?= $billing[0]['total_amount'] ?> /-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="width:100%;padding:10px">
                                        <b>Summary</b> -<br> <?= $billing[0]['summary'] ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('includes/web-footer.php'); ?>
    </div>});
</div>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php'); ?>
<script>
    function printDiv() {
        var divContents = document.getElementById("GFG").innerHTML;
        var a = window.open('', '', 'height=800, width=800');
        var htmlToPrint = '' +
            '<style>' +
            'td {' +
            'border:1px solid grey;' +
            '}' +
            '</style>';
        a.document.write('<html><head>' + htmlToPrint + '</head>');
        a.document.write('<body > ');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>
</body>

</html>
<?php
//
$form = new p2\Form($_GET);
if ($_GET) {
    //$form = new p2\Form($_GET);

    if ($form->isSubmitted()) {
        $errors = $form->validate(
            [
                'split_way' => 'required|numeric',
                'tab' => 'required|numeric'
            ]
        );

        if (!$errors) {
            $splitterVal = 0;
            $subTotal = $_GET['tab'] + ($_GET['service-tip'] * $_GET['tab'] / 100);
            $splitterVal = number_format($subTotal / $_REQUEST['split_way'],2);
            if (isset($_GET['round-up']) and $_GET['round-up'] == 'yes') {
                $splitterVal = ceil($splitterVal);
            }
        }
    }
}
?>
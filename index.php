<?php
require('Form.php');
require('logic.php');
?>

<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='utf-8'>

    <title>The Magic Bill Splitter</title>
    <meta name='description' content='The Magic Bill Splitter'>
    <meta name='author' content='Taylor Meyer Site'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>
    <link rel='stylesheet' href='styles.css'>
</head>

<body>
<h2 class="text-center">The Magic Bill Splitter</h2>
<form name='bill-splitter' id='bill-splitter' method='get' class="billform">
    <div class="row form-group">
        <div class="col-sm-5 text-right">
            <label class="">Split how many ways? <span>* Required</span></label>
        </div>
        <div class="col-sm-5">
            <input type='text'
                   name='split_way'
                   class='form-control'
                   id='split_way'
                   value='<?= $form->prefill('split_way', '') ?>'>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-5 text-right">
            <label class="">How much was the tab? <span>* Required</span></label>
        </div>
        <div class="col-sm-5">
            <input type='text' class="form-control" name='tab' id='tab' value='<?= $form->prefill('tab', '') ?>'>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-5 text-right">
            <label class="">How was the service?</label>
        </div>
        <div class="col-sm-5">
            <select name='service-tip' id='service-tip' class="form-control">
                <option value='18' <?php if ($form->has('service-tip') and $form->get('service-tip','') == '18'): ?> selected="selected"<?php endif; ?>>Good (18% tip)</option>
                <option value='15' <?php if ($form->has('service-tip') and $form->get('service-tip','') == '15'): ?> selected="selected"<?php endif; ?>>OK (15% tip)</option>
                <option value='10' <?php if ($form->has('service-tip') and $form->get('service-tip','') == '10'): ?> selected="selected"<?php endif; ?>>Poor (10% tip)</option>
            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-5 text-right">
            <label class="">Round up?</label>
        </div>
        <div class="col-sm-5">
            <input type='checkbox'
                   name='round-up'
                   id='round-up'
                   value='yes' <?php if ($form->has('round-up') and $form->get('round-up','') == 'yes'): ?> checked="checked"<?php endif; ?>>Yes
        </div>
    </div>
    <br>
    <div class="clearfix text-center">
        <input type='submit' name='calculate' class='btn btn-primary' value='calculate' id='calculate'>
    </div>
    <br>
    <?php if (isset($errors) and count($errors) > 0) : ?>
        <div class='alert alert-danger'>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if (isset($splitterVal)) : ?>
        <div class="alert alert-success text-center">
            Everyone owes $<?php echo $splitterVal; ?>
        </div>
    <?php endif; ?>
</form>
</body>
</html>
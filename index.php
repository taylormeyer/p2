<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='utf-8'>

    <title>The Magic Bill Splitter</title>
    <meta name='description' content='The Magic Bill Splitter'>
    <meta name='author' content='Taylor Meyer Site'

    <link rel='stylesheet' href='styles.css'>

</head>

<body>
    <form name='bill-splitter' id='bill-splitter' method='get'>
        <label>Split how many ways? <span>* Required</span></label>
        <input type='text' name='split_way' id='split_way'>
        <br>
        <label>How much was the tab? <span>* Required</span></label>
        <input type='text' name='total' id='total'>
        <br>
        <label>How was the service?</label>
        <select name='service-tip' id='service-tip'>
            <option value='18'>Good (18% tip)</option>
            <option value='15'>OK (15% tip)</option>
            <option value='10'>Poor (10% tip)</option>
        </select>
        <br>
        <label>Round up?</label>
        <input type='checkbox' name='round-up' id='round-up' value='yes' checked='checked'>Yes

        <br>
        <input type='submit' name='calculate' value='calculate' id='calculate'>
    </form>
</body>
</html>
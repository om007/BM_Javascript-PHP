<?php
/**
 * QUESTION 5. Create an action controller which will receive POST request from frontend,
 * need to validate the inputs as defined (like if we should get id and value,
 * check if id is number and value is string), catch the errors if any and return
 * the some outputs in JSON format
 */

//POST request
if ($_POST) {
    $id = $_POST['id'];
    $value = $_POST['value'];
    //Validate the input
    if (empty($id) || !preg_match('/^\d+$/', $id)) {
        $id_error = 'Input integer value for ID';
    } else if (empty($value)) {
        $value_error = 'Value cannot be empty';
    } else {
        $obj = new stdClass();
        $obj->id = $id;
        $obj->value = $value;
        $json = json_encode($obj);
        echo $json;
    }
}

?>
<html>
    <head>
        <title>PHP Post Request</title>
    </head>
    <body>
        <form method="post" action="">
            <table>
                <tr><td colspan="2" style='color: red;'><?php echo (isset($id_error)) ? $id_error : ''; ?></td></tr>
                <tr>
                    <td>ID: </td>
                    <td><input type="text" name="id" value="<?php echo isset($id) ? $id : ""; ?>"/></td>
                </tr>
                <tr><td colspan="2" style='color: red;'><?php echo (isset($value_error)) ? $value_error : ''; ?></td></tr>
                <tr>
                    <td>Value</td>
                    <td><input type="text" name="value" /></td>
                </tr>
                <tr>
                    <td><button type="submit">Submit</button</td>
                    <td></td> 
                </tr>
            </table>
        </form>
    </body>
</html>
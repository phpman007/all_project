<?php
return [
  'name' => [
    'field_name' => 'ชื่อ - นามสกุล',
    'validate' => 'required|max:255',
  ],
  'province' => [
    'field_name' => 'จังหวัดที่ท่านอาศัยอยู่',
    'validate' => 'required|max:255',
  ],
  'email' => [
    'field_name' => 'Email',
    'validate' => 'required|email',
  ],
  'password' => [
    'field_name' => 'Password',
    'validate' => 'required',
  ],
  'password_confirmation' => [
    'field_name' => 'Confirm password',
    'validate' => 'required|max:255',
  ],
  'answer_forget_password' => [
    'field_name' => 'คำถาม',
    'validate' => 'required|max:255',
  ],
  'question_forget_password' => [
    'field_name' => 'คำตอบ',
    'validate' => 'required|max:255',
  ],


  // Save Data page
  'text1' => [
    'field_name' => 'Text1',
    'validate' => 'required|max:255',
  ],
  'text2' => [
    'field_name' => 'Date2',
    'validate' => 'required|max:255',
  ],
  'remark' => [
    'field_name' => 'Remark',
    'validate' => 'required',
  ],
  'field1' => [
    'field_name' => 'Field1',
    'validate' => 'required|max:255',
  ],
  'field2' => [
    'field_name' => 'Field2',
    'validate' => 'required|max:255',
  ],
  'field3' => [
    'field_name' => 'Field3',
    'validate' => 'required|max:255',
  ],
  'field4' => [
    'field_name' => 'Field4',
    'validate' => 'required|max:255',
  ],
  'field5' => [
    'field_name' => 'Field5',
    'validate' => 'required|max:255',
  ],
  'field6' => [
    'field_name' => 'Field6',
    'validate' => 'required|max:255',
  ],
  'field7' => [
    'field_name' => 'Field7',
    'validate' => 'required|max:255',
  ],
  'field8' => [
    'field_name' => 'Field8',
    'validate' => 'required|max:255',
  ],
  'field9' => [
    'field_name' => 'Field9',
    'validate' => 'required|max:255',
  ],
  'number1' => [
    'field_name' => 'number',
    'validate' => 'required',
  ],
  'number2' => [
    'field_name' => 'number',
    'validate' => 'required',
  ],
  'number3' => [
    'field_name' => 'number',
    'validate' => 'required',
  ],
  'date1' => [
    'field_name' => 'Date1',
    'validate' => 'required',
  ],
  'date2' => [
    'field_name' => 'Date2',
    'validate' => 'required',
  ],
  'attachment' => [
    'field_name' => 'Upload File',
    'validate' => 'max:10000|mimes:jpg,jpeg,pdf,gif,png,bmp', //a required, max 10000kb
  ],
  'policy' => 'policy Edite from Config/fields.php ==>> policy field',

]

?>


 <!DOCTYPE html>
 <html>
 <head>
    <a href="{{ action('PDFController@samplePDF') }}" style="margin-left:620px;">Export PDF</a></br>
    <a href="{{ action('PDFController@downloadPDF') }}" style="margin-left:620px;">Generate PDF</a></br>
    <a href="{{ action('PDFController@HtmlToPDF') }}" style="margin-left:620px;">HTML TO PDF</a>    

</head>



<form method="post"  action="{{ url('data') }}">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>">

<table align="center" border="2" style="margin-top:20px;">
    <th align="center" colspan="2">User Registration</th>
    <tr>
        <td>UserName</td>
        <td><input type="text" name="username"></td>
        
    </tr>

     <tr>
        <td>Email-ID</td>
        <td><input type="mail" name="email"></td>
        
    </tr>
    <tr>
        <td>Mobile Nomber</td>
        <td><input type="text" name="mobile_no"></td>
        
    </tr>
    <tr>
        <td>Education</td>
        <td><input type="text" name="education"></td>
        
    </tr>
    <tr>
        <td>country</td>
        <td><input type="text" name="country"></td>
        
    </tr>
    <td align="center" colspan="2"> 
     <input type="submit" name="submit"value="Register" ></td>
</table>
</form>
</html>


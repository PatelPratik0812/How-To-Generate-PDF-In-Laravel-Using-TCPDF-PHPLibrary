<!DOCTYPE html>
<html>
<head>
</body>
<h1 align="center" style="marfgin-top:400px;">Employee Report</h1>
<div style="width: 100%; position: relative; float: left; background-color: #286fb7; margin-bottom: 10px;" > 
  <h2 align="center" style="color: white; margin-top:-25px;"></h2> 
<table border="1" width="80%" cellpedding="10%">
{{csrf_field()}}
     <tr style="color:#cc3328;background-color:#dce2e8;"> 
             <th width="10%" align="center" height="25px">Reg_ID</th>
             <th width="20%"align="center">UserName</th>
             <th width="30%"align="center">Email-ID</th>
             <th width="20%"align="center">Mobile-Nomber</th>
             <th width="20%"align="center">Education</th>
             <th width="20%"align="center">Country</th>
     </tr>
      @foreach($register as $fetch)
 
     <tr>
             <td align="center" height="20">{{ $fetch->reg_id }}</td>
             <td align="center" height="20">{{ $fetch->username }}</td>
             <td align="center" height="20">{{ $fetch->email }}</td>
             <td align="center" height="20">{{ $fetch->mobile_no }}</td>
             <td align="center" height="20">{{ $fetch->education }}</td>
             <td align="center" height="20">{{ $fetch->country }}</td>
             
     </tr>
     @endforeach
 </table>
    </body>
    </html>

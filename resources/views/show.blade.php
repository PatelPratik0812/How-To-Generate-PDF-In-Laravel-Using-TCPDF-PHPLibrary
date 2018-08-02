<!DOCTYPE html>
<html>
<head>
</head>

<body>



            <table align="center" border="2">
            <th align="center" colspan="6">User Data</th>
              
                <tr>
                  <td>Reg_id</td>
                  <td>UserName</td>
                  <td>Email-ID</td>
                  <td>Mobile-No</td>
                  <td>Education</td>
                  <td>Country</td>
                  
                </tr>
              
              @foreach($register as $fetch)
              <tbody>
                <tr>
                  <td>{{ $fetch->reg_id++ }}</td>
                  <td>{{ $fetch->username }}</td>
                  <td>{{ $fetch->email }}</td>
                  <td>{{ $fetch->mobile_no }}</td>
                  <td>{{ $fetch->education }}</td>
                  <td>{{ $fetch->country }}</td>
                  
                </tr>
                @endforeach
                </tbody>
              
            </table>
         
</body>
</html>
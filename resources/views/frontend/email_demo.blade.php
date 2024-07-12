<html>
    <head>
        <title>Mail</title>
    </head>
    <body>
        <p>Enquiry from Website!</p>
       
        
        	<table>
            <tr>
                <th>Name</th>
                <td>{{ $detail['name']}}</td>
            </tr>
            <tr>
                <th>Phone No</th>
                <td>{{ $detail['phone'] }}</td>
            </tr>
            <tr>
                <th>Course</th>
                <td>{{ $detail['msg'] }}</td>
            </tr>
       	</table>
    </body>
</html>
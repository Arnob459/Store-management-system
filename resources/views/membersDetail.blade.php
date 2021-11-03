<h1>Members's Details</h1>
<li><a href="/"> Home </a></li>
<table border="1">
    <tr>
        <td>Id</td>
        <td>{{ $membersInfo['id'] }}</td>
    </tr>
    <tr>
        <td>First name</td>
        <td>{{ $membersInfo['first_name'] }}</td>
    </tr>
    <tr>
        <td> Last Name</td>
        <td>{{ $membersInfo['last_name'] }}</td>
    </tr>
    <tr>
        <td> Email</td>
        <td>{{ $membersInfo['email'] }}</td>
    </tr>
    <tr>
        <td>Product created at</td>
        <td>{{ $membersInfo['created_at'] }}</td>
    </tr>
    <tr>
        <td>Product updated at</td>
        <td>{{ $membersInfo['updated_at'] }}</td>
    </tr>
    
</table>

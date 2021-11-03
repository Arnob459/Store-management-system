<h1>Members List</h1>
@include("navbar")

@if(session('membersList'))
    <h3 style="color:rgb(34, 192, 34)">{{ session('membersList') }} has saved in member List . Please enter another member</h3>
@endif

<table border="1">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last name</td>
        <td>Email </td>
        <td>Details </td>
        <td>Edit </td>
    </tr>


    @foreach($membersCollection as $members)
    <tr>
        <td>{{ $members['id'] }}</td>
        <td>{{ $members['first_name'] }}</td>
       
        <td>{{ $members['last_name'] }}</td>
        <td>{{ $members['email'] }}</td>

        <td><a href={{"membersDetail/".$members['id']}}>details</a></td>
        <td><a href={{"memberEdit/".$members['id']}}>edit</a></td>

    
        

    </tr>

    @endforeach


</table>

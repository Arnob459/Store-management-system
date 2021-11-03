<h1>Members Update</h1>
<li><a href="/"> Home </a></li>
<form action="{{ route('membersUpdate') }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <table border="1">
        <tr>
            <td>Attributes</td>
            <td>Current Values</td>
            <td>Enter New Values</td>
        </tr>
        <tr>
            <td><label for="id">ID : </label></td>
            <td>{{ $membersInfo['id'] }}</td>
            <td><input  type="hidden" name="id" value={{ $membersInfo['id'] }} id="id"></td>
            @error('id')
                    {{ $message }}
                @enderror
        </tr>
        <tr>
            <td><label for="first_name">First name : </label></td>
            <td>{{$membersInfo['first_name']}}</td>
            <td><input  type="text" name="first_name"  id="first_name"></td>
        </tr>
        <tr>
            <td><label for="last_name"> Last Name : </label></td>
            <td>{{$membersInfo['last_name']}}</td>
            <td><input  type="text" name="last_name"  id="last_name"></td>
        </tr>
        <tr>
            <td><label for="email"> Email : </label></td>
            <td>{{ $membersInfo['email'] }}</td>
            <td><input type="email" name="email"  id="email"></td>
        </tr>

        <tr>
            <td><label for="password"> Password : </label></td>
            <td>{{ $membersInfo['password'] }}</td>
            <td><input type="text" name="password"  id="password"></td>
        </tr>
        
        

        



        <tr>
            <td></td>
            <td></td>
            <td><button type="submit" > Update </button></td>
        </tr>
    </table>
</form>

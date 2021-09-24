@extends('layouts.app3')

@section('content')

<?php /*
public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    echo "h3";

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do notatch our records.',
        ]);
    }
 */
try
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // collect value of input field
        $name = $_REQUEST['uname'];
        if (empty($name))
        {
            echo "Name is empty";
        }
        else
        { 
            $sqll="SELECT * FROM `users` where email like '%".$name."%'"; 
            $results = DB::select($sqll );

            if( empty($requests))
            { 
                echo "<table border=1>";
                echo "<tr bgcolor=#ececee><td>id </td>";
                echo "<td>name</td>";  
                echo "<td>email_verified_at </td>";  
                echo "<td>password </td>";  
                echo "<td> remember_token</td>";  
                echo "<td> created_at</td>";  
                echo "<td> updated_at</td>";  
                echo "</td></tr>";
                foreach ($results as $result1) {
                    $_SESSION["loged"]=$result1 ->name;
                    $_SESSION["register"]="true";
                    echo "<tr><td>";
                    echo $result1 ->id; 
                    echo "</td>";
                    echo "<td>";
                    echo $result1 ->name	; 
                    //old('uname')=$result1 ->name;
                    echo "</td>";
                    echo "<td>";
                    echo $result1 ->email_verified_at;
                    echo "</td>";
                    echo "<td>";
                    echo $result1 -> password	;
                    echo "</td>";
                    echo "<td>";
                    echo $result1 -> remember_token ;
                    echo "</td>";
                    echo "<td>";
                    echo $result1 -> created_at;
                    echo "</td>";
                    echo "<td>";
                    echo $result1 -> updated_at;
                    echo "</td></tr>";
                } 
            
                echo "</table>"; 
                echo "have data";
        }
        else
        {
            echo "Error: ". $name;
        }

    }
    }
    else{


    }
}
catch( Exception $ex)
{
echo"err:".$ex;
}

// Retrieve the currently authenticated user's ID...
$user = Auth::user();
$id = Auth::id();
//DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
//id	name	email	email_verified_at	password	remember_token	created_at	updated_at	

$results = DB::select("SELECT * FROM `migrations` ");//where id = ?", [1]);

echo "<table border=1>";
echo "<tr bgcolor=#ececee><td>id"; 
echo "</td>";
echo "<td>migration"; 
echo "</td>";
echo "<td>batch"; 
echo "</td></tr>";
foreach ($results as $result1) {
    echo "<tr><td>";
    echo $result1 ->id; 
    echo "</td>";
    echo "<td>";
    echo $result1 ->migration; 
    echo "</td>";
    echo "<td>";
    echo $result1 ->batch; 
    echo "</td></tr>";
} 

echo "</table>";
?>

<br><br><h2>user:{{ __(' txt User Name:') }}</h2>
<br><br>old(uname)):{{ old('uname') }}
@error('uname')
<br><br>  $name;:{{  $name }}
msg:{{ $message }}
@enderror
<br><br>pas:{{ __('Password:') }}
<br><br>oldf1:{{ old('f1') }}
<br><br>usr:{{ $user }}
<br><br>id:{{ $id }}

@stop
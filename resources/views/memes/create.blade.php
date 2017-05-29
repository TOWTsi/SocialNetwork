<!--
Noch sehr minimalistisch gehalten um später in Absprache das Design
fest legen zu können.
-->
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create a new Meme</title>

    </head>
    <body>
    	<form method="post" name="addmeme" enctype="multipart/form-data">
    	{{ csrf_field() }}
        	<table>
        		<tr>
        			<td> Title:
        			<td> <input id="meme_title" name="meme_title" type="text" placeholder="title, max. 150 character" maxlength="150" required />
        		</tr>

        		<tr>
        			<td> Picture:
        			<td> <input id="picture" name="picture" type="file">
        		</tr>

        		<tr>
        			<td> Description:
        			<td> <input id="description" name="description" type="text" placeholder="not required"/>
        		</tr>

        		<tr>
        			<td> Group:
        			<!-- Soll optional sein, per Dropdownmenu, nur Gruppen möglich in denen Mitglied -->
        			<td> Coming soon!
        		</tr>
        	</table>
        	<input type="submit" value="submit">
        </form>
    </body>
</html>

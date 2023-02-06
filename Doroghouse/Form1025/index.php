<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>Login</title>
</head>
<body>
    <form action="rugosfamily.php" method="POST">
        Név:<input type="text" name="nev"><br/><br/>
        Email:<input type="text" name="email"><br/><br/>
        Jelszó:<input type="password" name="password"><br/><br/>
        Életkor:<input type="number" name="kor"><br/><br/>
        Születési Dátum:<input type="date"><br/><br/>
        Nem:
        <input type="radio" name="gender" value="Nő"><label for="Nő">Nő</label>
        <input type="radio" name="gender" value="Férfi"><label for="Férfi">Férfi</label>
        <input type="radio" name="gender" value="Egyéb"><label for="Egyéb">Egyéb</label><br/>
            Érdeklődési körök:<br/> 
            <input type="checkbox" name="korok[]" value="Állatok"><label for="korok">Állatok</label><br/>
            <input type="checkbox" name="korok[]" value="kutya"><label for="korok">Kutyák</label><br/>
            <input type="checkbox" name="korok[]" value="Autok"><label for="korok">Autok</label><br/>
            <input type="checkbox" name="korok[]" value="Modellezés"><label for="korok">Modellezés</label><br/>
            <input type="checkbox" name="korok[]" id="cigo"><label for="korok" value="cigányok">Cigányok</label><br/><br/>
            
            Informatikai Jártasság:<input type="range" name="jartassag" min="1" max="5" value="3"><br/><br/>
            Kedvenc szín:<select name="Szín" id="valasztek">
                <option value="kek">Kék</option>
                <option value="zold">Zöld</option>
                <option value="feher">Fehér</option>
                <option value="lila">Lila</option>
                <option value="barna">Barna</option>
                <option value="Ibolya">Ibolya</option>
                <option value="rozsaszin">Rózsaszín</option>
            </select><br/><br/>
            Egyéb megjegyzés:<br/><textarea name="megj" id="megj" cols="30%" rows="20%"></textarea><br/><br/>
            <input type="reset" value="reset">
            <input type="submit" value="feliratkozás"><br/>
</form>
</body>
</html>
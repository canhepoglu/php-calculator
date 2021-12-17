<?php
class hesapmakinesi
{
    function topla($sayi1, $sayi2)
    {
        return $sayi1 + $sayi2;
    }
    function cikar($sayi1, $sayi2)
    {
        return $sayi1 - $sayi2;
    }
    function carp($sayi1, $sayi2)
    {
        return $sayi1 * $sayi2;
    }
    function bol($sayi1, $sayi2)
    {
        return $sayi1 / $sayi2;
    }
}

class hesapmakinesi1 extends hesapmakinesi
{
    public function islemyap($sayi1, $sayi2, $islem)
    {
        if ($islem == "topla") {
            return $this->topla($sayi1, $sayi2);
        }
        if ($islem == "cikar") {
            return $this->cikar($sayi1, $sayi2);
        }
        if ($islem == "carp") {
            return $this->carp($sayi1, $sayi2);
        }
        if ($islem == "bol") {
            return $this->bol($sayi1, $sayi2);
        }
    }
}


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <form action="" method="post">
        <input type="text" name="sayi1" placeholder="Sayı1" value="<?php
                                                                    if (!empty($_POST['islem'])) {
                                                                        echo $_POST["sayi1"];
                                                                    } ?>"><br>
        <input type="text" name="sayi2" placeholder="Sayı2" value="<?php
                                                                    if (!empty($_POST['islem'])) {
                                                                        echo $_POST["sayi2"];
                                                                    } ?>"><br>
        <input type="text" name="sonuc" value="<?php
                                                if (!empty($_POST['islem'])) {
                                                    $hesap = new hesapmakinesi1;
                                                    $sonuc = $hesap->islemyap($_POST["sayi1"], $_POST["sayi2"], $_POST["islem"]);
                                                    echo $sonuc;
                                                } ?>" placeholder="Sonuç"><br>
        <button type="submit" class="btn btn-light" name="islem" value="topla">Topla</button>
        <button type="submit" class="btn btn-light" name="islem" value="cikar">Çıkar</button>
        <button type="submit" class="btn btn-light" name="islem" value="carp">Çarp</button>
        <button type="submit" class="btn btn-light" name="islem" value="bol">Böl</button>
    </form>
</body>

</html>
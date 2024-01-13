<?php

class BangunDatar{
    public float $luas;
    public float $keliling;
}

class Lingkaran extends BangunDatar{
    private float $r;

    function area(float $r){
        $phi = 3.14;
        $this->r = $r;
        $this->luas = $phi * $r * $r;
        return $this->luas;
    }

    function circumference(float $r){
        $phi = 3.14;
        $this->r = $r;
        $this->keliling = 2 * $phi * $r;
        return $this->keliling;
    }

    function enlarge(float $scale){
        $phi = 3.14;
        $this->keliling = 2 * $phi * $this->r * $scale;
        return $this->keliling;
    }

    function shrink(float $scale){
        $phi = 3.14;
        $this->keliling = 2 * $phi * $this->r / $scale;
        return $this->keliling;
    }
}

class Persegi extends BangunDatar{
    private float $sisi;

    function area(float $sisi){
        $this->sisi = $sisi;
        $this->luas = $sisi * $sisi;
        return $this->luas;
    }

    function circumference(float $sisi){
        $this->sisi = $sisi;
        $this->keliling = $sisi + $sisi + $sisi + $sisi;
        return $this->keliling;
    }

    function enlarge(float $scale){
        $this->sisi = $this->sisi * $scale;
        $this->keliling = $this->sisi + $this->sisi + $this->sisi + $this->sisi;
        return $this->keliling;
    }

    function shrink(float $scale){
        $this->sisi = $this->sisi / $scale;
        $this->keliling = $this->sisi + $this->sisi + $this->sisi + $this->sisi;
        return $this->keliling;
    }
}

class PersegiPanjang extends BangunDatar{
    private float $panjang;
    private float $lebar;

    function area(float $panjang, float $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->luas = $panjang * $lebar;
        return $this->luas;
    }

    function circumference(float $panjang, float $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->keliling = 2 * ($panjang + $lebar);
        return $this->keliling;
    }

    function enlarge(float $scale){
        $this->panjang = $this->panjang * $scale ;
        $this->lebar = $this->lebar * $scale;
        $this->keliling = 2 * ($this->panjang + $this->lebar);
        return $this->keliling;
    }

    function shrink(float $scale){
        $this->panjang = $this->panjang / $scale ;
        $this->lebar = $this->lebar / $scale;
        $this->keliling = 2 * ($this->panjang + $this->lebar);
        return $this->keliling;
    }
}

class descriptor{
    public static function describe(string $type, float $luas, float $keliling){
        return "Bangun Datar Ini Adalah $type Yang Memiliki Luas $luas, Dan Keliling $keliling \r\n";
    }
}


$lingkaran = new Lingkaran();
echo "\r\nLingkaran Section\r\n";
echo $lingkaran->area(7);
echo "\r\n";
echo $lingkaran->circumference(7);
echo "\r\n";
echo $lingkaran->enlarge(4);
echo "\r\n";
echo $lingkaran->shrink(2);
echo "\r\n";
echo descriptor::describe("Lingkaran", $lingkaran->luas, $lingkaran->keliling);

$persegi = new Persegi();
echo "\r\nPersegi Section\r\n";
echo $persegi->area(10);
echo "\r\n";
echo $persegi->circumference(10);
echo "\r\n";
echo $persegi->enlarge(4);
echo "\r\n";
echo $persegi->shrink(2);
echo "\r\n";
echo descriptor::describe("Persegi", $persegi->luas, $persegi->keliling);

$persegiPanjang = new PersegiPanjang();
echo "\r\nPersegi Panjang Section\r\n";
echo $persegiPanjang->area(5,2);
echo "\r\n";
echo $persegiPanjang->circumference(5,2);
echo "\r\n";
echo $persegiPanjang->enlarge(4);
echo "\r\n";
echo $persegiPanjang->shrink(2);
echo "\r\n";
echo descriptor::describe("Persegi Panjang", $persegiPanjang->luas, $persegiPanjang->keliling);

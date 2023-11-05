<?php
class Burung implements Hewan {
    public function bersuara(): void {
        echo "Burung mengeluarkan suara kukderuuuk";
    }

    public function bergerak(): void {
        echo "Burung terbang";
    }
}
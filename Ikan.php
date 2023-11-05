<?php
class Ikan implements Hewan {
    public function bersuara(): void {
        echo "Ikan tidak bersuara";
    }

    public function bergerak(): void {
        echo "Ikan berenang";
    }
}
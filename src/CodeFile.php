use Diff;
        $this->id = dechex(crc32($this->path));
        $this->operation = self::OP_CREATE;
        $diff = new Diff($lines1, $lines2);
    public function getOperation(): int
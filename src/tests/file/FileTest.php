<?php
/**
 * @author Márcio Lucas Rezende de Oliveira <marciioluucas@gmail.com>
 * @copyright MIT
 * @link https://github.com/marciioluucas/file-uploader-php
 */


namespace src\tests\file;

include '../../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use src\file\File;

class ArquivoTest extends TestCase
{
    private $archive;

    /**
     * ArquivoTest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->archive = new File(
            [
                "tmp_name" => "",
                "name" => "",
                "size" => "",
                "type" => ""
            ]
        );

    }


    /**
     * @test
     */
    public function testCriaDiretorio()
    {
        $this->archive->setDestinationPath("./uploads");
        $func = $this->archive->createDir();
        self::assertEquals(true, $func);
    }


    /**
     * @test
     */
    public function testIsDir()
    {
        $this->archive->setDestinationPath("./uploads");
        self::assertEquals(true, $this->archive->isDirExists());
    }

    /**
     * @test
     */
    public function testMoveUploadedFile()
    {
        $this->archive->setDestinationPath("./uploads");
        self::assertEquals(true, $this->archive->moveUploadedFile());
    }


}

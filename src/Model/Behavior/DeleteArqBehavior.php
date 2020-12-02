<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * DeleteArq behavior
 */
class DeleteArqBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function deleteArq($destino)
    {
    	$diretorio = new Folder($destino);
    	if ($diretorio->delete($destino)) {
		    return true;
		}else{
			return false;
		}
    	
    }

    public function deleteFile($destino, $arqAntigo, $arqNovo)
    {
    	if(($arqAntigo !== null) AND ($arqAntigo !== $arqNovo)){
            $file = new File($destino . $arqAntigo);
            $file->delete($destino . $arqAntigo);
        }
    }

    public function deleteArquivo($destino, $arquivo)
    {
        $file = new File($destino . $arquivo);
        $file->delete($destino . $arquivo);
    }

}

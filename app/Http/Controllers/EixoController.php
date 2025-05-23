<?php

namespace App\Http\Controllers;

use App\Repositories\EixoRepository;
use App\Models\Eixo;
use Illuminate\Http\Request;


class EixoController extends Controller
{
    protected $repository;
public function __construct(){
$this->repository = new EixoRepository();
}

public function index() {
    $data = $this->repository->selectAll();
    return $data;
    }

    public function store(Request $request) {
        $obj = new Eixo();
        $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
        $this->repository->save($obj);
        return "<h1>Store - OK!</h1>";
        }

     public function show(string $id) {
            $data = $this->repository->findById($id);
            return $data;
            }

            public function update(Request $request, string $id) {
                $obj = $this->repository->findById($id);
                if(isset($obj)) {
                $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
                $this->repository->save($obj);
                return "<h1>Upate - OK!</h1>";
                }
                return "<h1>Upate - Not found Eixo!</h1>";
                }
      public function destroy(string $id) {

        if($this->repository->delete($id)) {
            return "<h1>Delete - OK!</h1>";
            }
            return "<h1>Delete - Not found Eixo!</h1>";
            }
}

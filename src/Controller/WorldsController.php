<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Worlds Controller
 *
 * @property \App\Model\Table\WorldsTable $Worlds
 */
class WorldsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schematics']
        ];
        $this->set('worlds', $this->paginate($this->Worlds));
        $this->set('_serialize', ['worlds']);
    }

    /**
     * View method
     *
     * @param string|null $id World id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $world = $this->Worlds->get($id, [
            'contain' => ['Schematics']
        ]);
        $this->set('world', $world);
        $this->set('_serialize', ['world']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schematics = $this->Worlds->Schematics->find('list', ['limit' => 200]);
        $this->set(compact('schematics'));
        $this->Crud->execute("add");
    }

    /**
     * Edit method
     *
     * @param string|null $id World id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $world = $this->Worlds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $world = $this->Worlds->patchEntity($world, $this->request->data);
            if ($this->Worlds->save($world)) {
                $this->Flash->success(__('The world has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The world could not be saved. Please, try again.'));
            }
        }
        $schematics = $this->Worlds->Schematics->find('list', ['limit' => 200]);
        $this->set(compact('world', 'schematics'));
        $this->set('_serialize', ['world']);
    }

    /**
     * Delete method
     *
     * @param string|null $id World id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $world = $this->Worlds->get($id);
        if ($this->Worlds->delete($world)) {
            $this->Flash->success(__('The world has been deleted.'));
        } else {
            $this->Flash->error(__('The world could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

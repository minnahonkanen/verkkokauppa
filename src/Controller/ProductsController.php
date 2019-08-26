<?php
namespace App\Controller;

class ProductsController extends AppController
{
    public function initialize()
    {
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $products = $this->Paginator->paginate($this->Products->find());
        $this->set(compact('products'));
    }

    public function view($slug = null)
    {
        $product = $this->Products->findBySlug($slug)->firstOrFail();
        $this->set(compact('product'));
    }

    public function add()
    {
        $product = $this->Products->newEntity();

        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());

            if ($this->Products->save($product)) {
                $this->Flash->success(__('Uusi tuote tallennettu. <i id="close" class="far fa-times-circle"></i>'), ['escape' => false]);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Tuotteen tallentaminen epäonnistui.'));
        }
        $this->set('product', $product);
    }

    public function addToCart($slug = null)
    {
        $product = $this->Products->findBySlug($slug)->firstOrFail();
        $this->set(compact('cart'));
    }
}
?>

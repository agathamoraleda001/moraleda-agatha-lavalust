<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('ProductModel');
    }

    public function index()
    {
        $products = $this->ProductModel->get_products();

        $this->call->view('products', [
            'products' => $products
        ]);
    }

    public function create()
    {
        if ($this->io->method() == 'post') {
            $data = [
                'product_name' => $this->io->post('product_name'),
                'description' => $this->io->post('description'),
                'price' => $this->io->post('price'),
                'quantity' => $this->io->post('quantity')
            ];

            $this->ProductModel->create_product($data);

            redirect('products');
            exit;
        }

        $this->call->view('product_create');
    }

    public function edit($id)
    {
        $product = $this->ProductModel->get_product($id);

        if ($this->io->method() == 'post') {
            $data = [
                'product_name' => $this->io->post('product_name'),
                'description' => $this->io->post('description'),
                'price' => $this->io->post('price'),
                'quantity' => $this->io->post('quantity')
            ];

            $this->ProductModel->update_product($id, $data);

            redirect('products');
            exit;
        }

        $this->call->view('product_edit', [
            'product' => $product
        ]);
    }

    public function delete($id)
    {
        $this->ProductModel->delete_product($id);

        redirect('products');
        exit;
    }
}

<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('ProductModel');
        $this->call->library('api');
    }

    /*
    |--------------------------------------------------------------------------
    | WEB CRUD
    |--------------------------------------------------------------------------
    */

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
                'description'  => $this->io->post('description'),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity')
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
                'description'  => $this->io->post('description'),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity')
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


    /*
    |--------------------------------------------------------------------------
    | API CRUD
    |--------------------------------------------------------------------------
    */

    public function api_index()
    {
        $this->api->require_jwt();

        $products = $this->ProductModel->get_products();

        $this->api->respond([
            'status' => 200,
            'message' => 'Products retrieved successfully',
            'data' => $products
        ]);
    }

    public function api_create()
    {
        $this->api->require_jwt();

        $data = $this->api->body();

        if (
            empty($data['product_name']) ||
            !isset($data['price']) ||
            !isset($data['quantity'])
        ) {
            $this->api->respond_error(
                'product_name, price, and quantity are required.',
                400
            );
        }

        $product_data = [
            'product_name' => $data['product_name'],
            'description'  => $data['description'] ?? '',
            'price'        => $data['price'],
            'quantity'     => $data['quantity']
        ];

        $this->ProductModel->create_product($product_data);

        $this->api->respond([
            'status' => 201,
            'message' => 'Product created successfully',
            'data' => $product_data
        ], 201);
    }

    public function api_update($id)
    {
        $this->api->require_jwt();

        $product = $this->ProductModel->get_product($id);

        if (!$product) {
            $this->api->respond_error('Product not found.', 404);
        }

        $data = $this->api->body();

        $product_data = [
            'product_name' => $data['product_name'] ?? $product['product_name'],
            'description'  => $data['description'] ?? $product['description'],
            'price'        => $data['price'] ?? $product['price'],
            'quantity'     => $data['quantity'] ?? $product['quantity']
        ];

        $this->ProductModel->update_product($id, $product_data);

        $this->api->respond([
            'status' => 200,
            'message' => 'Product updated successfully',
            'data' => $product_data
        ]);
    }

    public function api_delete($id)
    {
        $this->api->require_jwt();

        $product = $this->ProductModel->get_product($id);

        if (!$product) {
            $this->api->respond_error('Product not found.', 404);
        }

        $this->ProductModel->delete_product($id);

        $this->api->respond([
            'status' => 200,
            'message' => 'Product deleted successfully'
        ]);
    }
}

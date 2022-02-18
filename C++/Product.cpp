#include <string>
#include <iostream>

using namespace std;

class Product
{
    private:
        string idProduct;
        string price;
    public:
        Product()
        {

        }

        Product(string idProduct, string price)
        {
            this->idProduct = idProduct;
            this->price = price;
        }

        void setIdProduct(string idProduct)
        {
            this->idProduct = idProduct;
        }

        string getIdProduct()
        {
            return this->idProduct;
        }

        void setPrice(string price)
        {
            this->price = price;
        }

        string getPrice()
        {
            return this->price;
        }

        ~Product()
        {

        }
};
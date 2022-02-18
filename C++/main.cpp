#include <string>
#include <iostream>
#include "Memory.cpp"

using namespace std;

int main(int argc, char const *argv[])
{
    Memory VGA;
    VGA.setBrand("ASUS");
    VGA.setModel("RTX 3090");
    VGA.setPrice("Rp. 40.500.000,-");
    VGA.setIdProduct("AG21");
    VGA.setFrequency("19.5 Gbps");
    VGA.setMemorySize("24GB");
    VGA.setSupportsCuda("10496 Cores");

    cout << "DESKRIPSI VGA" << endl;
    cout << "=================================" << endl;
    cout << "Brand       : " << VGA.getBrand() << endl;
    cout << "Model       : " << VGA.getModel() << endl;
    cout << "Price       : " << VGA.getPrice() << endl;
    cout << "Product ID  : " << VGA.getIdProduct() << endl;
    cout << "Frequency   : " << VGA.getFrequency() << endl;
    cout << "Memory Size : " << VGA.getMemorySize() << endl;
    cout << "Cuda Cores  : " << VGA.getSupportsCuda() << endl;
    
    return 0;
}

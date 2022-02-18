from Product import Product
from Hardware import Hardware
from Memory import Memory

VGA = Memory()
VGA.setBrand("ASUS")
VGA.setModel("RTX 3090")
VGA.setPrice("Rp. 40.500.000,-")
VGA.setIdProduct("AG21")
VGA.setFrequency("19.5 Gbps")
VGA.setMemorySize("24GB")
VGA.setSupportsCuda("10496 Cores")

print("DESKRIPSI VGA")
print("=================================")
print("Brand        : " + str(VGA.getBrand()))
print("Model        : " + str(VGA.getModel()))
print("Price        : " + str(VGA.getPrice()))
print("Product ID   : " + str(VGA.getIdProduct()))
print("Frequency    : " + str(VGA.getFrequency()))
print("Memory Size  : " + str(VGA.getMemorySize()))
print("Cuda Cores   : " + str(VGA.getSupportsCuda()))
class Product:
    __idProduct = ""
    __price = ""

    def __init__(self, idProduct = "", price = ""):
        self.__idProduct = idProduct
        self.__price = price

    def setIdProduct(self, idProduct):
        self.__idProduct = idProduct
    
    def getIdProduct(self):
        return self.__idProduct

    def setPrice(self, price):
        self.__price = price

    def getPrice(self):
        return self.__price
    
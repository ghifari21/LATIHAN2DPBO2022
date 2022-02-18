from Hardware import Hardware

class Memory(Hardware):
    __frequency = ""
    __memorySize = ""
    __supportsCuda = ""

    def __init__(self, frequency = "", memorySize = "", supportsCuda = ""):
        self.__frequency = frequency
        self.__memorySize = memorySize
        self.__supportsCuda = supportsCuda

    def setFrequency(self, frequency):
        self.__frequency = frequency
    
    def getFrequency(self):
        return self.__frequency

    def setMemorySize(self, memorySize):
        self.__memorySize = memorySize

    def getMemorySize(self):
        return self.__memorySize

    def setSupportsCuda(self, supportsCuda):
        self.__supportsCuda = supportsCuda

    def getSupportsCuda(self):
        return self.__supportsCuda
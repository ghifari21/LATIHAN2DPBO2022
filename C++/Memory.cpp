#include <string>
#include <iostream>
#include "Hardware.cpp"

using namespace std;

class Memory : public Hardware
{
    private:
        string frequency;
        string memorySize;
        string supportsCuda;
    public:
        Memory()
        {

        }

        Memory(string frequency, string memorySize, string supportsCuda)
        {
            this->frequency = frequency;
            this->memorySize = memorySize;
            this->supportsCuda = supportsCuda;
        }

        void setFrequency(string frequency)
        {
            this->frequency = frequency;
        }

        string getFrequency()
        {
            return this->frequency;
        }

        void setMemorySize(string memorySize)
        {
            this->memorySize = memorySize;
        }

        string getMemorySize()
        {
            return this->memorySize;
        }

        void setSupportsCuda(string supportsCuda)
        {
            this->supportsCuda = supportsCuda;
        }

        string getSupportsCuda()
        {
            return this->supportsCuda;
        }

        ~Memory()
        {

        }
};
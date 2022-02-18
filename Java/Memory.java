public class Memory extends Hardware {
    private String frequency;
    private String memorySize;
    private String supportsCuda;

    public Memory() {

    }

    public Memory(String frequency, String memorySize, String supportsCuda) {
        this.frequency = frequency;
        this.memorySize = memorySize;
        this.supportsCuda = supportsCuda;
    }

    public void setFrequency(String frequency) {
        this.frequency = frequency;
    }

    public String getFrequency() {
        return this.frequency;
    }
    
    public void setMemorySize(String memorySize) {
        this.memorySize = memorySize;
    }
    
    public String getMemorySize() {
        return this.memorySize;
    }
    
    public void setSupportsCuda(String supportsCuda) {
        this.supportsCuda = supportsCuda;
    }

    public String getSupportsCuda() {
        return this.supportsCuda;
    }
}

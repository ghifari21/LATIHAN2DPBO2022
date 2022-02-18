import java.io.PrintStream;

public class main {
    public static void main(String[] args) {
        Memory VGA = new Memory();

        VGA.setBrand("ASUS");
        VGA.setModel("RTX 3090");
        VGA.setPrice("Rp. 40.500.000,-");
        VGA.setIdProduct("AG21");
        VGA.setFrequency("19.5 Gbps");
        VGA.setMemorySize("24GB");
        VGA.setSupportsCuda("10496 Cores");

        System.out.println("DESKRIPSI VGA");
        System.out.println("=================================");
        System.out.println("Brand       : " + VGA.getBrand());
        System.out.println("Model       : " + VGA.getModel());
        System.out.println("Price       : " + VGA.getPrice());
        System.out.println("Product ID  : " + VGA.getIdProduct());
        System.out.println("Frequency   : " + VGA.getFrequency());
        System.out.println("Memory Size : " + VGA.getMemorySize());
        System.out.println("Cuda Cores  : " + VGA.getSupportsCuda());
    }
}

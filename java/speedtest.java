
import static java.lang.String.format;

public class speedtest {

private static void longTask() {
int ia, ib, ic, id, ie;
long i = 0;
for (ia = 1; ia < 90; ia++) {
for (ib = 1; ib < 89; ib++) {
for (ic = 1; ic < 88; ic++) {
for (id = 1; id < 87; id++) {
for (ie = 1; ie < 86; ie++) {
i++;
}
}
}
}
}
System.out.println(format("osszesen: %d \n", i)); // ha ezt kiveszed, akkor piszok gyorsa lesz.
}


public static void main(String[] args) {
longTask();
}
}
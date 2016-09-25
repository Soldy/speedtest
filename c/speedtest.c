#include <stdio.h>
#include <stdint.h>
int main(void)
{

    int ia, ib, ic, id, ie;
    int64_t i = 0;
    for (ia = 1 ; ia < 90; ia++){
        for (ib = 1 ; ib < 89; ib++){
            for (ic = 1 ; ic < 88; ic++){
                  for (id = 1 ; id < 87; id++){
                      for (ie = 1 ; ie < 86; ie++){
                          i++;
                    }
                }
            }
        }
    }
    printf("osszesen: %ld \n", i);
    return 0;
}
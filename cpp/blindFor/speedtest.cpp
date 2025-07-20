#include <iostream>

int main(void)
{

    uint32_t ia, ib, ic, id, ie;
    uint64_t i = 0;
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
    std::cout << i << std::endl;
    return 0;
}

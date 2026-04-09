#include <stdio.h>
#include <stdbool.h>

int main() {
    char flag[] = "VOSSCTF{how_did_you_get_this?}";
    char answer[10];

    while (true) {
        printf("Do you want the flag?\n");
        scanf("%9s", answer);
        printf("No, you can't have it >:)\n");
    }
    return 0;
}
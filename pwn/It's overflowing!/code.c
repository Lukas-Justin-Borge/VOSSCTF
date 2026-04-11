int main() {
    int secret = 0xdeadbeef;
    char name[100] = {0};
    read(0, name, 256); // TODO: check security here
    if (secret == 0x1337) {
        puts("Wow! Here's a secret.\n");
        print_flag();
    } else {
        puts("I guess you're not cool enough to see my secret");
    }
    return 0; 
}

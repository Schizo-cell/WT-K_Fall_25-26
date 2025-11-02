#include <iostream>
using namespace std;

int main() {
    string input;
    bool isNumeric = true;
    cout << "Enter input: ";
    cin >> input;
    for (int i = 0; i < input.length(); i++) {
        if (!isdigit(input[i])) {
            isNumeric = false;
            break;
        }
    }
    if (isNumeric) {
        cout << "Numeric Constant" << endl;
    } else {
        cout << "Not Numeric Constant" << endl;
    }
    return 0;
}

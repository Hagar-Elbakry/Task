#include <iostream>
using namespace std;
#include <vector>
int calc(vector<string>&arr , int n) {
    int ans=0;
    for(int i=0;i<n;i++) {
        if(arr[i] == "++") {
            ans++;
        } else {
            ans--;
        }
    }
    return ans;
}
int main() {
    cout<<"Enter number of operations : ";
    int n;
    cin>>n;
    vector<string>arr(n);
    for(int i=0;i<n;i++) {
        cout<<"Enter operation no "<<i+1<<" ";
        cin>>arr[i];
        cout<<"\n";
    }
   int ans = calc(arr,n);
   cout<<ans<<"\n";

   return 0;
}
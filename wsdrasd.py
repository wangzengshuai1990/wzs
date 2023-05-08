score=[56,77,89,43,29,98,76,55,8,34,79,234,88]
print(score)
n=len(score)
for i in range(0,n-1):
    for j in range(n-1,i,-1):
        if score[j]<score[j-1]:
            score[j],score[j-1]=score[j-1],score[j]
print(score)

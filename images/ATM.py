withdraw=int(input())
balance=int(input())
if 0<withdraw<=2000 and 0<balance<=2000:
    if withdraw%5==0:
        result=balance-withdraw-0.50 if withdraw<balance else balance
        print(result)
    else:
        print(balance)

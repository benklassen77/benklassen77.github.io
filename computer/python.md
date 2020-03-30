# Python

## Basic Syntax

Comments

```py

# Single line comment

'''This is a
multiline comment'''

```

Main types of data structures:

- **int** = integers

```py
a=1
b=2
c=a+b
```

- **float** = floating point numbers

```py
a=1.0
b=12.345
c=2.4e5
```

- **bool** = boolean-type numbers (T/F)

```py
a=True
b=False
```

- **string** = sequence of characters

```py
string_1="Hello World"
string_2='World'
string_3="The quick 'brown' fox jumps \"over\" the lazy dog"
string_4 = "Hello"+" World"
```

As shown above, strings are enclosed by " or ', but ' can be used within ". If one wants to use " within, use brackets.

Python allows for concatenation using the plus sign, and inserting variables into a string using **.format(a,b)** inside curly brackets, as shown below:

```py
a=13+14
b=9*10
print("a={0} and b={1}".format(a,b))
```

- **list** = python's built-in arrays
- **dict** = dictionaries
- **tuple** = tuples

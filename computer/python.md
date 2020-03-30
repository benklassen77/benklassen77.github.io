# Python

- [Python](#python)
  - [Basic Syntax](#basic-syntax)

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

Python allows for concatenation using the plus sign, and inserting variables into a string using **.format(a,b)** inside curly brackets, as shown below. The curly bracket zero indexes the first variable in the .format function.

```py
a=13+14
b=9*10
print("a={0} and b={1}".format(a,b))
```

There are also identifiers for positions of variables in the string that specify the variable type as well as information about their properties. **%d** specifies an integer and **%f** specifies a floating point number. If one wanted to know how many decimals are needed in the point number output, this would be included with the %f specifier like **.2f**. This specifies 2 decimal places.

```py
a=2.38498776234876
b=3
print("a=%.2f and b=%d"%(a,b))
```

- **list** = python's built-in arrays

Lists are like arrays that can store any datatype together.

- **dict** = dictionaries
- **tuple** = tuples

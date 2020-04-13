# [Python](http://benjaminklassen.com)

- [Python](#python)
  - [Basic Syntax](#basic-syntax)
  - [Conditions and statements](#conditions-and-statements)
  - [Operators](#operators)
  - [For loops](#for-loops)
  - [Functions](#functions)
    - [Important Keywords](#important-keywords)
  - [NumPy](#numpy)
    - [Important functions](#important-functions)

## Basic Syntax

Comments

```py
# Single line comment

'''This is a
multiline comment'''
```

Main types of data structures:

**int** = integers

```py
a=1
b=2
c=a+b
```

**float** = floating point numbers

```py
a=1.0
b=12.345
c=2.4e5
```

**bool** = boolean-type numbers (T/F)

```py
a=True
b=False
```

**string** = sequence of characters

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

**list** = python's built-in arrays

Lists are like arrays that can store any datatype together.

```py
list1=[1,2,3,4]
list2=["hello",2.4.15,list1]
list3=[[1,2,3,4],[5,6,7,8]]
```

- **Indexing** references the first variable as zero and uses square brackets. If there is a matrix within an array, multiple indexes are used. The first references the location within the entire array, and the second references the location within the inner matrix.

```py
a=[2,4,16,32]
print(a[0])
a[1]="hello"
print(a)
b=[[3,6],[9.12]]
print(b[0][1])
```

There are also many special functions for lists:

- **append(*element*)** = adds element to end of list
- **clear()** = deletes all elements from list
- **copy()** = copies list
- **count(*value*)** = returns number of elements equal to the specified value
- **extend(*iterable*)** = attaches iterable to end of list
  - An iterable is multiple objects in one, like a list or a string
- **index(*value*)** = returns the position (starting from zero) of the first element of the string corresponding to the value
- **insert(*pos,element*)** = adds element to position specified from pos
- **pop(*pos*)** = removes element located as per pos. If pos dne, assumes last element
- **remove(*value*)** = removes first element in list corresponding to value
- **reverse()** = reverses the order of the elements in the list
- **sort()** = sorts elements in list

```py
a=["dog","cat","lion"]

a.append("seal")
print("append: {0}".format(a)) #Adds "seal" to the end

a.insert(2,"ant")
print("insert: {0}".format(a)) #Adds "ant" to the third spot in the array

a.remove("dog")
print("remove: {0}".format(a)) #Removes "dog"

a.pop(3)
print("pop: {0}".format(a)) #Removes "seal"

a.extend(["apple","pear"])
print("extend: {0}".format(a)) #Adds matrix to and of array
```

**dict** = dictionaries

Dictionaries are essentially unordered lists, which each element retrievable using a key. They are made using curly brackets, the key and the element are linked via a colon (:), and elements are separated with commas.

```py
eg_dict={"object":"beam",
        "material":"steel",
        "type":"IPE120",
        "h":120,
        "b":64}

print(eg_dict["material"]) #Prints steel
```

**tuple** = tuples

A tuple is an ordered, unchangeable array. It is defined with circle brackets. While it cannot be changed, certain functions, such as count and index, can still be applied to it.

```py
firsttuple=(1,2,3,"apple",5)

print(firsttuple.count("apple")) #Prints 1
print(firsttuple.index(5)) #Prints 4
```

## Conditions and statements

**If statement**: run if contingent on a certain variable being true or false

```py
x=3
y=5

if x<y:
    print("x is smaller than y")
else:
    print("x is greater than y")
```

If one wants multiple if statements together, this can be accomplished with the **elif statement**.

```py
beam = {"mat":"steel","E":210000}

if beam["mat"] == "concrete":
    print("This is a concrete beam")
elif beam["mat"] == "steel":
    print("This is a steel beam")
elif beam["mat"] == "wood":
    print("This is a wooden beam")
else:
    print("I do not recognize the material")
```

- else statement at the end is optional, but runs in case of a false outcome

**Conditions**: there are several important mathematical conditions

- Equals: *a==b*
- Not equals: *a!=b*
- Greater than: *a>b*
- Greater than or equal to: *a>=b*
- Less than: *a<b*
- Less than or equal to: *a<=b*

**Logical Operators**: there are three types

- **and**: returns *true* if both statements are such
- **or**: returns *true* if at least one statement is true
- **not**: reverses condition results. Eg. not(*True*) = False

**Shorthand notation**: there are several ways to reduce the lines in your code.

- To define multiple variables in a single line, put them in order separated with a comma
- f statements can be written in a single line. See below for example, written in multiple ways

```py
x,y=10,5

if x>y: print("x>y")
print("x>y") if x>y else print("x<y")
print("x>y") if x>y else print("x=y") if x==y else print("x<y")
```

## Operators

**Arithmetic Operators**: used for mathematical operations

- addition +
- subtraction -
- multiplication *
- division /
- modulus %
- exponentiation **
- floor division //

**Assignment Operators**: shorthand for expressions that alter a pre-defined variable

- += adds
- -= subtracts
- \*= multiplies
- /= divides
- %= unsure
- \*\*= exponent
- //= floor divides

```py
x=3
x+=2 #This would make x=5

x=3
x//=2 #This would make x=1
```

**Membership Operators**: utilize 'in' operator or 'not in' as a false alternative

This can be used in an if statement, as shown below

```py
a=3
egList =[1,2,3,4,5]

if a in egList:
    print("a is in egList")
else:
    print("a is not in egList")
```

## For loops

There are some functions that work with for loops. For example, *range()* and *len()*

- range(*3*) indexes all numbers from 0-(3-1)
- len(*variable*) gives the length of the variable

```py
list=[2,4,8,18]
length=len(list)

for i in range(length)
    print(list[i])
```

- The **break** statement prevents the for loop from continuing after the specified iteration occurs. In contrast, the **continue** statement skips the specified iteration

```py
for i in range(5)
    if i==3
        break
    print(i) # 0,1, and 2 are printed.. it stops there
```

## Functions

A **function** is an element that takes inputs, performs operations, and returns an output\

### Important Keywords

- **def function_name(var1,var2,var3):** defines the function name and it's predefined input variables
- **return** specifies the output

## NumPy

NumPy is a library that manages arrays.

**Array**: a structure similar to a list, except that it contains only one type of object

To start using NumPy, import as below

```py
import numpy as np
```

This assigns numpy the nickname "np". One doesn't have to import NumPy beyond the first cell

### Important functions

**np.array([1,2,3,4])**: makes an array from the content inside. If it contains both integers and floats, it will convert the integers into floats

- **np.zeros((3))**: takes in a tuple input and makes an array of 3 zeros as floating numbers by default
- **np.ones((2,3), dtype=int**: makes an array of ones with 2 rows 3 columns. It also changes them to become integers with the dtype specifier

**a=np.linspace(1,10,6)**: generates an array of 6 numbers linearly between 1 and 10

**a=np.arange(1,10,1)**: generates array of numbers between 1 and (10-1) with a step of 1 each increase

It is also important to retrieve information about the array's dimension and dtype

- **ndarray.ndim**: returns number of axes of the array
- **ndarray.shape**: returns dimensions of the array as a tuple
- **ndarray.size**: returns the total number of elements in array
- **ndarray.dtype**: returns the dtype of the elements of the array (eg. int32)

If there is an array with multiple rows and columns, it can be indexed using [i,j], with i representing row and j representing column

```py
b=np.array([[0,1],[2,3]])
print(b[1,1]) # Prints 3
```

There is also some math that can happen between arrays. For example, let's say a and b are integer, 4x4 matrices. The below could be used:

- print(a+b) # Addition
- print(a\*\*2) # Exponential
- print(np.sqrt(b)) # Square Root
- print(a@b) # Matrix Product

Furthermore, arrays can be indexed through the use of the semicolon.

```py
a=np.linspace(0,10,11)
print(a) # Prints array between 0 and 10
print(a[2:5]) # Prints array between 2 and 5
print(a[1:7:2]) # Prints every second element between 1 and 7
```

Arrays can be concatenated in 2 ways

- **np.hstack((a,b,c))**: puts arrays a,b,c together into a single row array
- **np.vstack((a,b,c))**: puts arrays a,b,c together into a single array, with respective rows for each array

Additionally, one can insert values into an array using the below

- **np.append(a,4)**: inserts the number 4 at the end of array a
- **np.insert(a,index,7)**: inserts the number 7 at the specified index of array a

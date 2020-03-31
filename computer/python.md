# [Python](http://benjaminklassen.com)

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

- **dict** = dictionaries
- **tuple** = tuples

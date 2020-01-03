# Latex

[Greek-Symbol-Syntax](https://jblevins.org/log/greek)

To create separate equation

$$ V = mg $$

```latex
$$ V = mg $$
```

To tag a number

```latex
\tag
```

To create intext reference

```latex
\ref{equationname}
\label{equationname}
```

To begin and end equation

```latex
\begin{equation}
\end{equation}
or
\begin{equation*}
\end{equation*}
```

To add an intext formula

```latex
$equation$
```

To add a matrix $\ref{Matrix}$

```latex
\begin{equation}
Y = \begin{bmatrix}
a_{11} & a_{12} & a_{13}\\
a_{21} & a_{22} & a_{23}\\
a_{31} & a_{32} & a_{33}\\
\end{bmatrix}
\begin{bmatrix}
x_1\\
x_2\\
x_3\\
\end{bmatrix}
\label{matrix}
\end{equation}
```

To add a derivative $\ref{Derivative}$

```latex
\begin{equation}
\frac{dy}{dt} = 2t^2
\label{derivative}
\end{equation}
```

To add a partial derivative $\ref{partial}$

```latex
\begin{equation}
\frac{du}{dt} = 2x\frac{\partial u}{\partial x)} + 2y\frac{\partial u}{\partial y}
\label{partial}
\end{equation}
```

$$
\begin{equation}
Y = \begin{bmatrix}
a_{11} & a_{12} & a_{13}\\
a_{21} & a_{22} & a_{23}\\
a_{31} & a_{32} & a_{33}\\
\end{bmatrix}
\begin{bmatrix}
x_1\\
x_2\\
x_3\\
\end{bmatrix}
\label{Matrix}
\end{equation}
$$

$$
\begin{equation}
\frac{dy}{dt} = 2t^2
\label{derivative}
\end{equation}
$$

$$
\begin{equation}
\frac{du}{dt} = 2x\frac{\partial u}{\partial x)} + 2y\frac{\partial u}{\partial y}
\label{partial}
\end{equation}
$$
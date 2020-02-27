# Solid Mechanics

- [Solid Mechanics](#solid-mechanics)
  - [Solutions Manual](#solutions-manual)
  - [3D Systems of Forces](#3d-systems-of-forces)
    - [Fundamental Vectors](#fundamental-vectors)
    - [How to find 3D moments](#how-to-find-3d-moments)
  - [Basic Geometric Properties](#basic-geometric-properties)
  - [Shear](#shear)
  - [Axial](#axial)
  - [Bending](#bending)
  - [Torsion](#torsion)
  - [Combined Loadings](#combined-loadings)
  - [Deflection](#deflection)
    - [Normal Procedure](#normal-procedure)
    - [Moment-Area Method](#moment-area-method)

## [Solutions Manual](https://docdro.id/Y91joVs)

## 3D Systems of Forces

### Fundamental Vectors

**3D Force System** = a situation in which there is triaxial loading. Forces are expressed as vectors, which are composed of smaller vectors.

$$ \vec F = \vec{F_x} + \vec{F_y} + \vec{F_z} = F_x\cdot\hat{i} + F_y\cdot\hat{j} + F_z\cdot\hat{k}$$

$$ \vec{F} = F\cdot\hat{u}$$

**Coordinate Direction Angles** = the angles between forces along specified axes and the overall force vector. $\alpha$ represents the angle between $\vec{F_x}$ and $\vec F$, $\beta$ represents the angle between $\vec{F_y}$ and $\vec F$, and $\gamma$ represents the angle between $\vec{F_z}$ and $\vec F$.

$$ cos\alpha = \frac{A_x}{A},\ cos\beta = \frac{A_y}{A},\ cos\gamma = \frac{A_z}{A} $$

**Position Vector** = vector with two points in reference to each other rather than the origin. Algebraically, the position vector has $X = (X_b-X_a)$ etc.

$$\vec r_{AB} = (X_b - X_a)\hat{i} + (Y_b - Y_a)\hat{j} + (Z_b - Z_a)\hat{k}$$

**Magnitude** = numerical quantity of the force vector, found using the magnitudes of the forces along each respective axis.

$$ |\vec{F}| = F = \sqrt{F_x^2 +F_y^2 + F_z^2}$$

**Direction Unit Vector** = vector indicating the direction of the force.

$$ \hat{u} =
\begin{bmatrix}
cos{\alpha}\\
cos{\beta}\\
cos{\gamma}\\
\end{bmatrix} = \frac{\vec F}{F} = \frac{\vec r_{AB}}{r_{AB}}
$$

### How to find 3D moments

In order to find the moments, take the cross product between position vector and the force vector $\vec{r}\times\vec{F}$. This can be determined using the below.

$$
\det{\begin{vmatrix}
i & j & k \\
r_x & r_y & r_z \\
F_x & F_y & F_z \\
\end{vmatrix}}\tag{Moment Equation}
$$

If you need the moment about a specified axis, you can use one of the below shortcut formulas.

$$r_yF_z - r_zF_y\tag{Moment about x axis}$$

$$r_zF_x - r_xF_z\tag{Moment about y axis}$$

$$r_xF_y - r_yF_x\tag{Moment about z axis}$$

**Right Hand Rule** = with the thumb curled in the direction of the specified axis, the fingers curl in the direction of positive moment along that axis.

## Basic Geometric Properties

$$ \bar x = \frac{\sum(\prime A\prime(\bar x))}{\sum(\prime A)} \tag(X axis centroid) $$

$$ \bar y = \frac{\sum(\prime A\prime(\bar y))}{\sum(\prime A)} \tag(Y axis centroid) $$

$$ \bar x = \frac{\int_A \tilde x dA}{\int_A dA} \tag(Centroid of Area)$$

$$ \bar x = \frac{\int_V \tilde x dV}{\int_V dV} \tag(Centroid of Volume)$$

There are two forms of moment of inertia: mass and area. These are often confused, but they are relatively simple to distinguish.

If someone says "moment of inertia", they are referring to mass, or first moment of inertia. This is referred to by I in calculations.

**Moment of inertia** = provides resistance against changing the rotational speed of rotating body. In a sense, it is analagous of mass in rotational situations. Units in form eg. $ lb\cdot in^2 $. dM represents small quantity of mass, and r represents distance of small mass from the axis.

$$ I = \int (r^2 dM) \tag (Moment of inertia) $$

$$I = I_(cm) + md^2 \tag{Parallel Axis Theorum Mass}$$

While the MOI equation is cool, MOIs are found on wikipedia for common shapes.

If someone says "second moment of inertia", they are referring to area. This is used in beam design, with units of $mm^4$.

$$ I_(xx) = \int (y^2 dA) \tag (Second Moment of inertia X Axis) $$

$$I_(z) = I_(x) + Ar^2 \tag{Parallel Axis Theorum Area}$$

## Shear

- Diameter of pins given allowable stress
- shear formula
- shear centre
- shear flow

## Axial

- statically indeterminate member
- thermal stress

## Bending

- how to make bending moment diagram
- 2D flexture formula

## Torsion

- torsion formula
- angle of twist
- statically indeterminate torque-loaded members
- thin-walled sections

## Combined Loadings

- unsymmetrical bending
- inelastic bending

## Deflection

### Normal Procedure

1. Check for points where slope or deflection is known.
   - Deflection is typically zero wherever there is a support
   - Slope has a negative/positive relationship where cuts meet.
2. Solve for reactions at supports
   - Includes both moments and loads at supports.
3. Take a cut any distance x between an end of the beam and a reaction and find Mo equation.
   - Every change in loading requires another cut
4. Integrate equations according to the following equation.
5. Plug in knowns and solve.

$$EI\frac{d^2 y}{d x^2}=M_O\tag{Moment Equation}$$
$$EI\theta(x) = \int{M_O dx} + C\tag{Slope Equation}$$
$$EIy(x)=\int{\int{M_O+C_1dx}} + C_2\tag{Deflection Equation}$$

### Moment-Area Method

$$ \theta(A) = \frac{\Delta DA}{L_{beam}}\tag{General Curvature Slope} $$

$$ \theta DA = \int^D_A{\frac{M}{EI}}\tag{Curvature Slope} $$

- $\theta DA$ is the area under the curvature diagram

$$ \Delta DA = \int^D_A{\frac{M\bar{x}}{EI}}\tag{Curvature Deflection} $$

- It is the moment-area under the curvature diagram
- $\Delta DA$ is the deflection from point tangential to D to point tangential to A. Otherwise, $\Delta AD$ is the deflection from a point tangential to A to a point tangential to D. The point of origination comes first.

To find maximum deflection:

1. Create bending moment diagram
   - Do not do shear force diagram first, takes too much time
2. Draw deflection diagram below moment diagram
   - Maximum deflection will be on the side with the longest section of beam. This point will be named D for instance
3. Find curvature of endpoint with respect to starting position (eg. A)
4. Find slope at A by dividing curvature of length over the length
5. Knowing that the $\theta A$ is equivalent to $\theta DA$, it is okay to set $\theta A$ equal to the area of moments between the point of maximum deflection and an endpoint in an effort to discover where the maximum deflection occurs.

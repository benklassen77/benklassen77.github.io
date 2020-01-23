# Solid Mechanics

- [Solid Mechanics](#solid-mechanics)
  - [3D Systems of Forces](#3d-systems-of-forces)
    - [Fundamental Vectors](#fundamental-vectors)
    - [How to find 3D moments](#how-to-find-3d-moments)
  - [Geometric Properties](#geometric-properties)
  - [Shear](#shear)
  - [Axial](#axial)
  - [Bending](#bending)
  - [Torsion](#torsion)
  - [Combined Loadings](#combined-loadings)
  - [Deflection](#deflection)
    - [Procedure](#procedure)
  - [Design](#design)

## 3D Systems of Forces

### Fundamental Vectors

**3D Force System** = a situation in which there is triaxial loading. Forces are expressed as vectors, which are composed of smaller vectors.

$$ \vec F = \vec{F_x} + \vec{F_y} + \vec{F_z} = F_x\cdot\hat{i} + F_y\cdot\hat{j} + F_z\cdot\hat{k}$$

$$ \vec{F} = F\cdot\hat{u}$$

**Coordinate Direction Angles** = the angles between forces along specified axes and the overall force vector. $\alpha$ represents the angle between $\vec{F_x}$ and $\vec F$, $\beta$ represents the angle between $\vec{F_y}$ and $\vec F$, and $\gamma$ represents the angle between $\vec{F_z}$ and $\vec F$.

$$ cos\alpha = \frac{A_x}{A},\ cos\beta = \frac{A_y}{A},\ cos\gamma = \frac{A_z}{A} $$

**Position Vector** = vector with two points in reference to each other rather than the origin. Algebraically, the position vector has $X = (X_b-X_a)$ etc., such that $\vec r_{AB} = (X_B-X_A)\hat{i} + (Y_B - Y_A)\hat{j} + (Z_B-Z_A)\hat{k}$

**Magnitude** = numerical quantity of the force vector, found using the magnitudes of the forces in each respective axis.

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

In order to find the moments, take the cross product between position vector and the force vector $\vec{r}\times\vec{F}$. This can be determined using the determinate of the matrix below.

$$
\begin{bmatrix}
i & j & k \\
r_x & r_y & r_z \\
F_x & F_y & F_z \\
\end{bmatrix}\tag{Moment Equation}
$$

If you need the moment about a specified axis, you can use one of the below shortcut formulas.

$$r_yF_z - r_zF_y\tag{Moment about x axis}$$

$$r_zF_x - r_xF_z\tag{Moment about y axis}$$

$$r_xF_y - r_yF_x\tag{Moment about z axis}$$

**Right Hand Rule** = with the thumb curled in the direction of the specified axis, the fingers curl in the direction of positive moment along that axis.

## Geometric Properties

- Center of gravity / centroid including composite bodies
- how to reduce distributed load to simple loading
- Moment of inertia (areas, parallel-axis theorem, composite areas

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

### Procedure

1. Check for points where slope or deflection is known.
   - Deflection is typically zero wherever there is a support
   - Slope has a negative/positive relationship where cuts meet.
2. Solve for reactions at supports
3. Take a cut any distance x from a reaction and find Mo equation.
   - Every change in loading requires another cut
4. Integrate equations according to the following equation.
5. Plug in knowns and solve.

$$EI\frac{d^2 y}{d x^2}=M_O\tag{Moment Equation}$$
$$EI\theta(x) = \int{M_O dx} + C\tag{Slope Equation}$$
$$EIy(x)=\int{\int{M_O+C_1dx}} + C_2\tag{Deflection Equation}$$

## Design

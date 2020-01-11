# Solid Mechanics

## Trusses

- Simple Trusses
- Method of joints
- Method of sections
- Frames

## Axial Loading

- Statically indeterminate axially loaded member
- Thermal stresses

## Bending

- Shear and moment diagrams

## 2D and 3D Equilibrium

## Shear

- Shear in straight members
- Shear flow buildup
- Shear center

## Torsion

## Combined Loading

## Deflection of beams

### Procedure

1. Check for points where slope or deflection is known
2. Solve for reactions at supports
3. Take a cut any position x from a reaction and find Mo equation  
   - Every change in loading requires another cut
4. Integrate equations according to the following equation

$$EI\frac{d^2 y}{d x^2}=M(x)\tag{Moment Equation}$$
$$EI\theta(x) = \int_0^x M(x)dx + C\tag{Slope Equation}$$
$$EIy(x)=\int{\int{M(x)dx+C_1}} + C_2\tag{Deflection Equation}$$
